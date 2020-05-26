<?php
namespace Zoop\Subscriptions;

use Zoop\Zoop;
/**
 * Subscription class
 * 
 * Essa classe é responsavel por tudo que seja relativo a Assinaturas.
 * 
 * @package Zoop\Subscriptions
 * @author victor <victor@margh.com.br>
 * @version 1.0.0
 */
class Subscription extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * createSubscription function
     *
     * Cria uma assinatura dentro do markeplace
     *
     * @param array $subscription
     *
     * @return bool|array
     * @throws \Exception
     */
    public function createSubscription(array $subscription)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/subscriptions', 
                ['json' => $subscription]
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
     * function getSubscription
     *
     * Pega os dados da assinatura associado
     * ao id passado como parametro.
     *
     * @param string $id
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getSubscription($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/subscriptions/' . $id
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
     * getAllSubscriptions function
     *
     * Lista todos as assinaturas do marketplace
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getAllSubscriptions()
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/subscriptions'
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
     * function deleteSubscription
     *
     * Deleta uma assinatura do marketplace utilizando como parametro
     * seu id.
     *
     * @param $id
     *
     * @return bool|mixed|void
     * @throws \Exception
     */
    public function deleteSubscription($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'DELETE', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/subscriptions/' . $id
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
     * function putSubscription
     *
     * Altera os dados de uma assinatura associado
     * ao id passado como parametro.
     *
     * @param string $id
     * @param array  $subscription
     *
     * @return bool|array
     * @throws \Exception
    */
    public function putSubscription($id, $subscription)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'PUT', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/subscriptions/' . $id,
                ['json' => $subscription]
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
     * function suspendSubscription
     *
     * Suspende uma assinatura associado
     * ao id passado como parametro.
     *
     * @param string $id
     *
     * @return bool|array
     * @throws \Exception
    */
    public function suspendSubscription($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/subscriptions/' . $id . '/suspend',
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
     * function reactivateSubscription
     *
     * Reativa uma assinatura associado
     * ao id passado como parametro.
     *
     * @param string $id
     *
     * @return bool|array
     * @throws \Exception
    */
    public function reactivateSubscription($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/subscriptions/' . $id . '/reactivate',
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
