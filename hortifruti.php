<?php

require_once 'fruta.class.php';
require_once 'laranja.php';
require_once 'laranja_bahia.php';

$f = new Laranja_Bahia("Laranja Bahia está bem doce");
$f->set_arvore("Laranjeira");
$f->set_nome_fruta("Laranja Bahia");
$f->set_preco(8.22);
$f->set_cor("Amarelo");
echo nl2br("Dá na árvore: ".$f->get_arvore()."\n");
echo nl2br("Fruta: ".$f->get_nome_fruta()."\n");
echo nl2br("Preço = $".$f->get_preco()." a dúzia\n");
echo nl2br("Cor: ".$f->get_cor()."\n\n");

$g = new Laranja("Laranja Lima está azeda");
$g->set_arvore("Laranjeira");
$g->set_nome_fruta("Laranja Lima");
$g->set_preco(6.05);
$g->set_cor("Amarelo-Esverdeado");
echo nl2br("Dá na árvore: ".$g->get_arvore()."\n");
echo nl2br("Fruta: ".$g->get_nome_fruta()."\n");
echo nl2br("Preço = $".$g->get_preco()." a dúzia\n");
echo nl2br("Cor: ".$g->get_cor()."\n\n");

$h = new Fruta("Maça argentina está bem grande");
$h->set_arvore("Macieira");
$h->set_nome_fruta("Maçã Argentina");
$h->set_preco(12.66);
echo nl2br("Dá na árvore: ".$h->get_arvore()."\n");
echo nl2br("Fruta: ".$h->get_nome_fruta()."\n");
echo nl2br("Preço = $".$h->get_preco()." a dúzia\n\n");



?>