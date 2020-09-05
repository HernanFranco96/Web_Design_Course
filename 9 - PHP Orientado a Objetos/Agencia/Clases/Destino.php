<?php

        class Destino
        {       
                private $destID;
                private $destNombre;
                private $regID;
                protected $regNombre;
                private $destPrecio;
                private $destAsientos;
                private $destDisponibles;
                private $destActivo;

                public function listarDestinos()
                {
                        $link = Conexion::conectar();
                        $sql = "SELECT destID, destNombre, 
                                        d.regID, r.regNombre, 
                                        destPrecio, 
                                        destAsientos, destDisponibles, 
                                        destActivo 
                                        FROM destinos d, regiones r
                                        WHERE d.regID = r.regID";
                        $stmt = $link->prepare($sql);
                        $stmt->execute();

                        $destinos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        return $destinos;
                }


                public function verDestinoPorID()
                {
                        $destID = $_GET['destID'];
                        $link = Conexion::conectar();
                        $sql = "SELECT destID, destNombre, 
                                        destinos.regID, regNombre,  
                                        destPrecio, 
                                        destAsientos, destDisponibles,
                                        destActivo
                                FROM destinos, regiones
                                WHERE destinos.regID = regiones.regID
                                        AND destID = :destID";
                        $stmt = $link->prepare($sql);
                        $stmt->bindParam(':destID', $destID, PDO::PARAM_INT);

                        if ( $stmt->execute() ){
                                $destino = $stmt->fetch(PDO::FETCH_ASSOC);
                                $this->setDestID($destID);
                                $this->setDestNombre($destino['destNombre']);
                                $this->setRegID($destino['regID']);
                                /// nombre de la regíon
                                $this->setRegNombre($destino['regNombre']);
                                $this->setDestPrecio($destino['destPrecio']);
                                $this->setDestAsientos($destino['destAsientos']);
                                $this->setDestDisponibles($destino['destDisponibles']);
                                $this->setDestActivo(1);
                                return true;
                        }
                        return false;
                }

                public function modificarDestino()
                {
                        $destID = $_POST['destID'];
                        $destNombre = $_POST['destNombre'];
                        $regNombre = $_POST['regNombre'];
                        $destPrecio = $_POST['destPrecio'];
                        $destAsientos = $_POST['destAsientos'];
                        $destDisponibles = $_['destDisponibles'];
                        $link = Conexion::conectar();
                        
                        $sql = "UPDATE regiones, destinos
                                SET regNombre = :regNombre
                                destNombre = :destNombre
                                WHERE regID = :regID";
        
                        $stmt = $link->prepare($sql);
                        $stmt->bindParam(':regNombre',$regNombre,PDO::PARAM_STR);
                        $stmt->bindParam(':regID',$regID,PDO::PARAM_INT);
                        
                        if($stmt->execute())
                        {
                                $this->setRegID($regID);
                                $this->setRegNombre($regNombre);
                                return true;
                        }                
                        return false;
                }  

                /**
                 * @return mixed
                 */
                public function getDestID()
                {
                return $this->destID;
                }

                /**
                 * @param mixed $destID
                 */
                public function setDestID($destID): void
                {
                $this->destID = $destID;
                }

                /**
                 * @return mixed
                 */
                public function getDestNombre()
                {
                return $this->destNombre;
                }

                /**
                 * @param mixed $destNombre
                 */
                public function setDestNombre($destNombre): void
                {
                $this->destNombre = $destNombre;
                }

                /**
                 * @return mixed
                 */
                public function getRegID()
                {
                return $this->regID;
                }

                /**
                 * @param mixed $regID
                 */
                public function setRegID($regID): void
                {
                $this->regID = $regID;
                }

                /**
                 * @return mixed
                 */
                public function getRegNombre()
                {
                return $this->regNombre;
                }

                /**
                 * @param mixed $regNombre
                 */
                public function setRegNombre($regNombre): void
                {
                $this->regNombre = $regNombre;
                }



                /**
                 * @return mixed
                 */
                public function getDestPrecio()
                {
                return $this->destPrecio;
                }

                /**
                 * @param mixed $destPrecio
                 */
                public function setDestPrecio($destPrecio): void
                {
                $this->destPrecio = $destPrecio;
                }

                /**
                 * @return mixed
                 */
                public function getDestAsientos()
                {
                return $this->destAsientos;
                }

                /**
                 * @param mixed $destAsientos
                 */
                public function setDestAsientos($destAsientos): void
                {
                $this->destAsientos = $destAsientos;
                }

                /**
                 * @return mixed
                 */
                public function getDestDisponibles()
                {
                return $this->destDisponibles;
                }

                /**
                 * @param mixed $destDisponibles
                 */
                public function setDestDisponibles($destDisponibles): void
                {
                $this->destDisponibles = $destDisponibles;
                }

                /**
                 * @return mixed
                 */
                public function getDestActivo()
                {
                return $this->destActivo;
                }

                /**
                 * @param mixed $destActivo
                 */
                public function setDestActivo($destActivo): void
                {
                $this->destActivo = $destActivo;
                }
        }