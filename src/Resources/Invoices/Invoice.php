<?php
namespace Zoop\Invoices;

use Zoop\Core\Zoop;
/**
 * Invoice class
 * 
 * Essa classe é responsavel por tudo que seja relativo a Faturas.
 * 
 * @package Zoop\Invoices
 * @author victor <victor@margh.com.br>
 * @version 1.0.0
 */
class Invoice extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * createInvoice function
     *
     * Cria uma fatura dentro
     *
     * @param array $Invoice
     *
     * @return bool|array
     * @throws \Exception
    */
    public function createInvoice(array $invoice)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/invoices', 
                ['json' => $invoice]
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
     * function getInvoice
     *
     * Pega os dados da fatura associado
     * ao id passado como parametro.
     *
     * @param string $id
     *
     * @return bool|array
     * @throws \Exception
    */
    public function getInvoice($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/invoices/' . $id
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
     * getAllInvoices function
     *
     * Lista todas as faturas do marketplace
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getAllInvoices()
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/invoices'
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
     * function putInvoice
     *
     * Altera os dados de uma fatura associado
     * ao id passado como parametro.
     *
     * @param string $id
     * @param array  $invoice
     *
     * @return bool|array
     * @throws \Exception
    */
    public function putInvoice($id, $invoice)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'PUT', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/invoices/' . $id,
                ['json' => $invoice]
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
     * function deleteInvoice
     *
     * Deleta uma fatura do marketplace utilizando como parametro
     * seu id.
     *
     * @param $id
     *
     * @return bool|mixed|void
     * @throws \Exception
    */
    public function deleteInvoice($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'DELETE', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/invoices/' . $id
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
     * function approveInvoice
     *
     * Aprovar manualmente uma fatura pendente, 
     * sem que seja feita a cobrança ao cobrador
     *
     * @param string $id
     *
     * @return bool|array
     * @throws \Exception
    */
    public function approveInvoice($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/invoices/' . $id . '/approve',
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
     * function voidInvoice
     *
     * Estornar uma fatura paga, sendo feito o processamento 
     * do estorno da forma de cobrança associada ao pagamento 
     * da fatura;
     *
     * @param string $id
     *
     * @return bool|array
     * @throws \Exception
    */
    public function voidInvoice($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'   /marketplaces/'. $this->configurations['marketplace']. '/invoices/' . $id . '/void',
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
