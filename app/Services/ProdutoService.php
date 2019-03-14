<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Services;

use App\Repositories\ProdutoRepository;
use App\Validators\ProdutoValidator;
use Exception;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\QueryException;

class ProdutoService{
    
    private $repository;
    private $validator;
    
    public function __construct(ProdutoRepository $repository, ProdutoValidator $validator) {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create($data){

         try {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $produto = $this->repository->create($data);
            return [
                'success' => true,
                'messages' => 'Produto cadastrado com sucesso!!!',
                'data' => $produto,
            ];
        } catch (Exception $e) {
            switch(get_class($e)) {
                case QueryException::class      :  return ['success' => false, 'messages' => $e->getMessage()];
                case ValidatorException::class  :  return ['success' => false, 'messages' => $e->getMessageBag()];
                case Exception::class           :  return ['success' => false, 'messages' => $e->getMessage()];
                default                         :  return ['success' => false, 'messages' => get_class($e)];
            }
        }

    }

    public function update($data, $id){

         try {

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $produto = $this->repository->update($data, $id);
            return [
                'success'   => true,
                'messages'  => "Produto atualizado",
                'data'      => $produto,
            ];
        }catch(Exception $e) {
            switch(get_class($e)) {
                case QueryException::class      :  return ['success' => false, 'messages' => $e->getMessage()];
                case ValidatorException::class  :  return ['success' => false, 'messages' => $e->getMessageBag()];
                case Exception::class           :  return ['success' => false, 'messages' => $e->getMessage()];
                default                         :  return ['success' => false, 'messages' => get_class($e)];
            }
        }

    }

    public function delete($id){

        try {
            
            $this->repository->delete($id);

            return [
                'success'   => true,
                'messages'  => "Produto removido",
                'data'      => null,
            ];

        } catch (Exception $e) {

            switch(get_class($e)) {
                case QueryException::class      :  return ['success' => false, 'messages' => $e->getMessage()];
                case ValidatorException::class  :  return ['success' => false, 'messages' => $e->getMessageBag()];
                case Exception::class           :  return ['success' => false, 'messages' => $e->getMessage()];
                default                         :  return ['success' => false, 'messages' => get_class($e)];
            }
            
        }

    }
}