<?php

namespace ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\ProductRepository")
 */
class Producto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Clave_producto", type="string", length=5, unique=true)
     */
    private $claveProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="Precio", type="float")
     */
    private $precio;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Product
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

    /**
     * Set claveProducto
     *
     * @param string $claveProducto
     *
     * @return Product
     */
    public function setClaveProducto($claveProducto)
    {
        $this->claveProducto = $claveProducto;

        return $this;
    }

    /**
     * Get claveProducto
     *
     * @return string
     */
    public function getClaveProducto()
    {
        return $this->claveProducto;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Product
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}

