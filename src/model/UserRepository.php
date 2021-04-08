<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class UserRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function get($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('User')->find(array('id' => $id));
		}
	}
	
	public function add($user)
	{
		if($this->db != null)
		{
			$this->db->persist($user);
			$this->db->flush();

			return $user->getId();
		}
	}
	
	public function delete($id){
		if($this->db != null)
		{
			$user = $this->db->find('User', $id);
			if($user != null)
			{
				$this->db->remove($user);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function update($user){
		if($this->db != null)
		{
			$u = $this->db->find('User', $user->getId());
			if($u != null)
			{
				$u->setNom($user->getNom());
				$u->setPrenom($user->getPrenom());
				$u->setEmail($user->getEmail());
				$u->setPassword($user->getPassword);
				$this->db->flush();

			}else {
				die("Objet ".$user->getId()." does not existe!!");
			}	
		}
	}
	
	public function liste(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT u FROM User u")->getResult();
		}
	}
	
	
	

	public function getLogin($email, $password)
	{
		if($this->db != null)
		{
			return $this->db
						 ->createQuery('SELECT u FROM User u
									  Where u.email = :em
									  and u.password = :pwd')
						 ->setParameter('em', $email)
						 ->setParameter('pwd', $password)
						 ->getSingleResult();//OBJET
						// ->getResult();OBJET[0]
		}
	}
	
}