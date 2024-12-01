<?php

class Perfume {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $urlImagem;

    public function __construct($id, $nome, $descricao, $preco, $urlImagem) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->urlImagem = $urlImagem;
    }

    public function verId() {
        return $this->id;
    }

    public function verNome() {
        return $this->nome;
    }

    public function verDescricao() {
        return $this->descricao;
    }

    public function verPreco() {
        return $this->preco;
    }

    public function verUrlImagem() {
        return $this->urlImagem;
    }

    public static function carregarDoBanco($id, $conexao) {
        $query = $conexao->prepare("SELECT produto_id, produto_nome, produto_descricao, produto_preco, produto_imagem FROM produtos WHERE produto_id = ?");
        $query->bind_param("i", $id);
        $query->execute();
        $resultado = $query->get_result();

        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
            return new Perfume(
                $dados['produto_id'],
                $dados['produto_nome'],
                $dados['produto_descricao'],
                $dados['produto_preco'],
                $dados['produto_imagem']
            );
        } else {
            return null;
        }
    }
}