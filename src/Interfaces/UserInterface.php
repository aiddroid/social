<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 2016/12/16
 * Time: 17:13
 */

namespace Aiddroid\Social\Interfaces;

/**
 * Interface UserInterface
 * @package Aiddroid\Social\Interfaces
 */
interface UserInterface
{
    /**
     * Get the user's id
     * @return mixed
     */
    public function getId();

    /**
     * Get the user nickname
     * @return mixed
     */
    public function getNickname();

    /**
     * Get avatar url
     * @return mixed
     */
    public function getAvatar();
}