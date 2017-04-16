<?php
/**
 * Created by PhpStorm.
 * User: ashterix
 * Date: 26.09.16
 * Time: 18:58
 */

namespace Ufo\JsonRpcBundle\Facade\Interfaces;


use Ufo\JsonRpcBundle\ApiMethod\Interfaces\IApiProcedure;

interface IFacadeJsonRpcServer
{
    /**
     * @return object JsonRpc Server
     */
    public function getServer();

    /**
     * @param IApiProcedure $procedure
     * @param string $namespace
     * @param mixed|null $argv
     * @return $this
     */
    public function addProcedure(IApiProcedure $procedure, $namespace = '', $argv = null);

    /**
     * @return mixed
     */
    public function handle();

    /**
     * @return mixed
     */
    public function getServiceMap();
        
}