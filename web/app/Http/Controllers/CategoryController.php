<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'parent_id' => $request->parent_id
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('id', '!=', $id)->get();

        return view('category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'parent_id' => $request->parent_id
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index');
    }

    public function resetCategoriesTable()
    {
        DB::table('categories')->truncate();

        $categories = [
            [
                'name' => 'Roupa',
                'subcategories' => [
                    'Feminino' => ['Vestidos', 'Camisetas', 'Calças'],
                    'Masculino' => ['Camisetas', 'Calças', 'Shorts'],
                    'Infantil' => ['Camisetas', 'Calças', 'Inverno'],
                ],
            ],
            [
                'name' => 'Eletrônico',
                'subcategories' => [
                    'Celulares' => ['Smartphones', 'Acessórios'],
                    'Computadores' => ['Laptops', 'Desktops'],
                    'Acessórios' => ['Fones de ouvido', 'Carregadores'],
                ],
            ],
            [
                'name' => 'Esportes',
                'subcategories' => [
                    'Equipamentos' => ['Bolas', 'Raquetes'],
                    'Roupas' => ['Camisetas', 'Shorts'],
                    'Calçados' => ['Tênis', 'Chuteiras'],
                ],
            ],
            [
                'name' => 'Beleza',
                'subcategories' => [
                    'Maquiagem' => ['Batons', 'Sombras'],
                    'Cabelos' => ['Shampoos', 'Condicionadores'],
                    'Pele' => ['Cremes', 'Protetores Solares'],
                ],
            ],
            [
                'name' => 'Brinquedos',
                'subcategories' => [
                    'Idade' => ['0-2 anos', '3-5 anos'],
                    'Tipo' => ['Educativos', 'Peluche'],
                    'Outros' => ['Jogos', 'Puzzles'],
                ],
            ],
            [
                'name' => 'Livros',
                'subcategories' => [
                    'Gênero' => ['Ficção', 'Não-Ficção'],
                    'Infantil' => ['Contos', 'Educacionais'],
                    'Outros' => ['Biografias', 'Autoajuda'],
                ],
            ],
            [
                'name' => 'Papelaria',
                'subcategories' => [
                    'Escritório' => ['Canetas', 'Papéis'],
                    'Escolar' => ['Mochilas', 'Cadernos'],
                    'Artes' => ['Tinta', 'Pincéis'],
                ],
            ],
            [
                'name' => 'Pet Shop',
                'subcategories' => [
                    'Cães' => ['Rações', 'Brinquedos'],
                    'Gatos' => ['Rações', 'Arranhadores'],
                    'Acessórios' => ['Camas', 'Guias'],
                ],
            ],
            [
                'name' => 'Jardinagem',
                'subcategories' => [
                    'Plantas' => ['Flores', 'Folhagens'],
                    'Ferramentas' => ['Pás', 'Tesouras'],
                    'Outros' => ['Adubos', 'Vasos'],
                ],
            ],
            [
                'name' => 'Ferramentas',
                'subcategories' => [
                    'Manuais' => ['Chaves', 'Martelos'],
                    'Elétricas' => ['Furadeiras', 'Serras'],
                    'Acessórios' => ['Parafusos', 'Pregos'],
                ],
            ],
        ];
        

        foreach ($categories as $categoryData) {
            $category = Category::create([
                'name' => $categoryData['name'],
                'slug' => Str::slug($categoryData['name']),
                'parent' => null
            ]);

            foreach ($categoryData['subcategories'] as $subcategoryName => $subItems) {
                $subcategory = Category::create([
                    'name' => $subcategoryName,
                    'slug' => Str::slug($category->name . " " . $subcategoryName),
                    'parent_id' => $category->id,
                ]);

                foreach ($subItems as $itemName) {
                    Category::create([
                        'name' => $itemName,
                        'slug' => Str::slug($itemName . " " . $subcategory->name),
                        'parent_id' => $subcategory->id,
                    ]);
                }
            }
        }

        return "ok";
    }
}
