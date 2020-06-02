<?php
namespace Zoop\MarketPlace;

use Zoop\Zoop;
/**
 * Class Accounts
 * 
 * Essa classe é utilizada para alterar, deletar, listar e
 * associar uma conta bancária a um customer. A conta é criada
 * na classe Tokens.
 * 
 * @package Zoop\MarketPlace
 * @author Victor <victor@margh.com.br>
 * @version 1.0.0
 */
class Accounts extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * putAccount function
     *
     * Altera os dados da conta
     *
     * @param string $id
     * @param array $account
     *
     * @return bool|array
     * @throws \Exception
    */
    public function putAccount($id, array $account)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'PUT', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/bank_accounts/' . $id,
                ['json' => $account]
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
     * getAllAccounts function
     *
     * Lista as contas bancárias do marketplace
     *
     * @return void
     * @throws \Exception
    */
    public function getAllAccounts()
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/bank_accounts'
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
     * getAccountById function
     *
     * Pega os dados de uma conta utilizando seu id
     * como paramtro.
     *
     * @param string|int $id
     *
     * @return void
     * @throws \Exception
    */
    public function getAccountById($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/bank_accounts/'. $id
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
     * function deleteAccount
     *
     * Deleta uma conta do marketplace utilizando como parametro
     * seu id.
     *
     * @param string $id
     *
     * @return bool|mixed|void
     * @throws \Exception
    */
    public function deleteAccount($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'DELETE', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/bank_accounts/' . $id
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
     * associateAccount function
     *
     * Associa uma conta a um customer
     *
     * @param array $content
     *
     * @return bool|array
     * @throws \Exception
    */
    public function associateAccount(array $content)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/bank_accounts',
                ['json' => $content]
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