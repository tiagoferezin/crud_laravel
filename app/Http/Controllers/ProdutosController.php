<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ProdutoCreateRequest;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Repositories\ProdutoRepository;
use App\Validators\ProdutoValidator;
use App\Services\ProdutoService;

/**
 * Class ProdutosController.
 *
 * @package namespace App\Http\Controllers;
 */
class ProdutosController extends Controller
{
    /**
     * @var ProdutoRepository
     */
    protected $repository;

    /**
     * @var ProdutoService
     */
    protected $service;

    /**
     * ProdutosController constructor.
     *
     * @param ProdutoRepository $repository
     * @param ProdutoValidator $validator
     */
    public function __construct(ProdutoRepository $repository, ProdutoService $service)
    {
        $this->repository = $repository;
        $this->service  = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $produtos = $this->repository->all();

        if (request()->wantsJson()) {

            return view('produtos.view', [
                'produtos' => $produtos,
            ])
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProdutoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ProdutoCreateRequest $request)
    {
        $request = $this->service->create($request->all());

        $produto = $request['success'] ? $request['data'] : null;

        session()->flash('success', [
            'success'   => $request['success'],
            'messages'  => $request['messages']
        ]);
        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->repository->find($id);

        
        return view('produtos.show', [
            'produto' => $produto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = $this->repository->find($id);

        return view('produtos.edit', [
            'produto' => $produto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProdutoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ProdutoUpdateRequest $request, $id)
    {
        $request        = $this->service->update($request->all(), $id);
        $instituition   = $request['success'] ? $request['data'] : null;
        session()->flash('success', [
            'success'   => $request['success'],
            'messages'  => $request['messages']
        ]);

        return redirect()->route('produtos.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = $this->service->delete($id);
        session()->flash('success', [
            'success'   => $request['success'],
            'messages'  => $request['messages']
        ]);
        return redirect()->route('produtos.index');
    }
}
