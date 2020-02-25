<?php

require_once(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."global.php");

class UsuarioDAO
{

    public function getAll(){

        $conn = Conexao::getConexao();
        $sql ="SELECT * FROM tbmarca";
        $pstm = $conn->prepare($sql);
        $pstm->execute();
        $lista = $pstm->fetchAll();

        return $lista;
    }

    public function verificaExistencia($user) {

        $conn = Conexao::getConexao();
        $sql = "SELECT * FROM tbusuario WHERE loginUsuario = ? AND senhaUsuario = ?";

        $pstm = $conn->prepare($sql);

        $pstm->bindValue(1,$user->getLoginUsuario());
        $pstm->bindValue(2,$user->getSenhaUsuario());

        $pstm->execute();
        $result = $pstm->fetchAll();

       if (count($result) == 0){

            return False;
       }
       else {
           return True;
       }
    }



}
