<?php
namespace Zoop\Plans;

use Zoop\Core\Zoop;
/**
 * Plan class
 * 
 * Essa classe é responsavel por tudo que seja relativo a Planos.
 * 
 * @package Zoop\Plans
 * @author victor <victor@margh.com.br>
 * @version 1.0.0
 */
class Plan extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * createPlan function
     *
     * Cria um plano dentro do markeplace
     *
     * @param array $plan
     *
     * @return bool|array
     * @throws \Exception
     */
    public function createPlan(array $plan)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'.$this->configurations['marketplace'].'/plans', 
                ['json' => $plan]
            );
            $response = \json_decode($request->getBody()->getContents(), true);
            if($response && is_array($response)){
                return $response;
            }
            return false;
        } catch (\Exception $e){            
            return $this->ResponseException($e);
        }
    }

    /**
     * function getPlan
     *
     * Pega os dados do plano associado
     * ao id passado como parametro.
     *
     * @param string $id
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getPlan($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/plans/' . $id
            );
            $response = \json_decode($request->getBody()->getContents(), true);
            if($response && is_array($response)){
                return $response;
            }
            return false;
        } catch (\Exception $e){            
            return $this->ResponseException($e);
        }
    }

    /**
     * getAllPlans function
     *
     * Lista todos os planos do marketplace
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getAllPlans()
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/plans'
            );
            $response = \json_decode($request->getBody()->getContents(), true);
            if($response && is_array($response)){
                return $response;
            }
            return false;
        } catch (\Exception $e){            
            return $this->ResponseException($e);
        }
    }

    /**
     * function deletePlan
     *
     * Deleta um plano do marketplace utilizando como parametro
     * seu id.
     *
     * @param $id
     *
     * @return bool|mixed|void
     * @throws \Exception
     */
    public function deletePlan($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'DELETE', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/plans/' . $id
            );
            $response = \json_decode($request->getBody()->getContents(), true);
            if($response && is_array($response)){
                return $response;
            }
            return false;
        } catch (\Exception $e){
            return $this->ResponseException($e);
        }
    }

    /**
     * function PutPlan
     *
     * Altera os dados do plano associado
     * ao id passado como parametro.
     *
     * @param string $id
     * @param array  $plan
     *
     * @return bool|array
     * @throws \Exception
    */
    public function putPlan($id, $plan)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'PUT', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/plans/' . $id,
                ['json' => $plan]
            );
            $response = \json_decode($request->getBody()->getContents(), true);
            if($response && is_array($response)){
                return $response;
            }
            return false;
        } catch (\Exception $e){            
            return $this->ResponseException($e);
        }
    }

}
