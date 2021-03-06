<?php

namespace SquirrelBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="SquirrelBundle\Repository\MenuRepository")
 */

class Menu
{
        /**
       * One Category has Many Categories.
       * @ORM\OneToMany(targetEntity="Menu", mappedBy="parent_menu")
       */
      private $children_menu;

      /**
       * Many Categories have One Category.
       * @ORM\ManyToOne(targetEntity="Menu", inversedBy="children_menu")
       * @ORM\JoinColumn(name="parent_menu_id", referencedColumnName="id")
       */
      private $parent_menu;


      public function __construct() {
            $this->children_menu = new \Doctrine\Common\Collections\ArrayCollection();
        }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_menu", type="string", length=150)
     */
    private $nombreMenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime")
     */
    private $updateAt;


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
     * Set nombreMenu
     *
     * @param string $nombreMenu
     * @return Menu
     */
    public function setNombreMenu($nombreMenu)
    {
        $this->nombreMenu = $nombreMenu;

        return $this;
    }

    /**
     * Get nombreMenu
     *
     * @return string
     */
    public function getNombreMenu()
    {
        return $this->nombreMenu;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Menu
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return Menu
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Add children_menu
     *
     * @param \SquirrelBundle\Entity\Menu $childrenMenu
     * @return Menu
     */
    public function addChildrenMenu(\SquirrelBundle\Entity\Menu $childrenMenu)
    {
        $this->children_menu[] = $childrenMenu;

        return $this;
    }

    /**
     * Remove children_menu
     *
     * @param \SquirrelBundle\Entity\Menu $childrenMenu
     */
    public function removeChildrenMenu(\SquirrelBundle\Entity\Menu $childrenMenu)
    {
        $this->children_menu->removeElement($childrenMenu);
    }

    /**
     * Get children_menu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildrenMenu()
    {
        return $this->children_menu;
    }

    /**
     * Set parent_menu
     *
     * @param \SquirrelBundle\Entity\Menu $parentMenu
     * @return Menu
     */
    public function setParentMenu(\SquirrelBundle\Entity\Menu $parentMenu = null)
    {
        $this->parent_menu = $parentMenu;

        return $this;
    }

    /**
     * Get parent_menu
     *
     * @return \SquirrelBundle\Entity\Menu
     */
    public function getParentMenu()
    {
        return $this->parent_menu;
    }
    public function getChildren() {
    return $this->children_menu;
}
}
