
<?php 

session_start();
include('conexao.php');



try{

                            if( isset($_POST['entrar']) ){
                             
                              /*

                                recebe os dados via metodo post  e faz a comparação com os dados no BD, 
                                para posterior realizar a validação dos dados

                               
                                */
                                $login = $_POST['login'];
                                $senha = $_POST['senha'];
                              
                                $verificar = false;
                                $sql = $conn->prepare("SELECT usuario, senha  FROM usuarios WHERE usuario = :login AND senha = :senha");
                                $sql->bindValue(":login",$login);
                                $sql->bindValue(":senha",$senha);
                                  $sql->execute();
                                $stmt = $sql->fetch();
                                    
                                      

                            
                                if( isset($_POST['login']) == $stmt['usuario'] && isset($_POST['senha']) == $stmt['senha']){
                                  $verificar = true;
                                  header('Location: ../pages/clientes.php?autenticado');
                                }else{
                                  header('Location: ../pages/admin.php?erro');
                                }
                                  
                                   /*

                                   váriaveis de sessão, a variavel $_SESSION['id']
                                   está com BUG então por favor manter desabilitado 
    

                                   */
                                    if($verificar){
                                      $_SESSION['logado'] = 'SIM';
                                      $_SESSION['usuario'] = $stmt['usuario'];
                                      $_SESSION['id'] = $stmt['id'];
                                    }else{
                                      $_SESSION['logado'] = 'NÃO';
                                      header("Location: ../index.php?erro");
                                    }
                             }
                          }catch(Exception $e){
                             echo"Erro |".$e->getMessage()." contate o desenvolvedor";
                          }
                      