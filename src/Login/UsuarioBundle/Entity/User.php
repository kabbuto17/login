<?php

namespace Login\UsuarioBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Login\UsuarioBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User implements UserInterface
 {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $login
	 *
	 * @ORM\Column(name="login", type="string", length=255)
	 */
	private $login;

	/**
	 * @var string $password
	 *
	 * @ORM\Column(name="password", type="string", length=255)
	 */
	private $password;

	/**
	 * @var string $nombre
	 *
	 * @ORM\Column(name="nombre", type="string", length=255)
	 */
	private $nombre;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set login
	 *
	 * @param string $login
	 * @return User
	 */
	public function setLogin($login)
	{
		$this->login = $login;

		return $this;
	}

	/**
	 * Get login
	 *
	 * @return string 
	 */
	public function getLogin()
	{
		return $this->login;
	}

	/**
	 * Set password
	 *
	 * @param string $password
	 * @return User
	 */
	public function setPassword($password)
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * Get password
	 *
	 * @return string 
	 */
	public function getPassword() 
	{
		return $this->password;
	}

	/**
	 * Set nombre
	 *
	 * @param string $nombre
	 * @return User
	 */
	public function setNombre($nombre) 
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get nombre
	 *
	 * @return string 
	 */
	public function getNombre() 
	{
		return $this->nombre;
	}
	public function getRoles() 
	{
		return "ROLE_USER";
	}
	public function getSalt() 
	{
		return 1234;
	}
	public function getUsername() 
	{
		return $this->getLogin();
	}
	public function eraseCredentials() 
	{
	}
	
	function equals(\Symfony\Component\Security\Core\User\UserInterface $usuario)
	{
		return $this->getUsername() == $usuario->getUsername();
	}
	

}
