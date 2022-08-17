<?php
    namespace App\Http\Traits;
    use App\Category;
    use App\Product;

    trait ProductTrait{
        public function sort($CollectionId = null)
        {
            $products = Product::where('published', 1);
            if($CollectionId){
                $products = $products->whereHas('collections', function($q) use ($CollectionId) {
                    $q->where('collection_id', $CollectionId);
                });
            }
            if (!isset($_GET['sort_by']) || $_GET['sort_by'] == 'default')
              $products= $products->orderby('id', 'desc');
            else if ($_GET['sort_by'] == 'title-ascending')
                $products= $products->orderby('name', 'asc');
            else if ($_GET['sort_by'] == 'title-descending')
                $products= $products->orderby('name', 'desc');
            else if ($_GET['sort_by'] == 'price-ascending')
                $products= $products->orderby('price', 'asc');
            else if ($_GET['sort_by'] == 'price-descending')
                $products= $products->orderby('price', 'desc');
            else if ($_GET['sort_by'] == 'created-descending')
                $products= $products->orderby('created_at', 'desc');
            else if ($_GET['sort_by'] == 'created-ascending')
                $products= $products->orderby('created_at', 'asc');
            else if ($_GET['sort_by'] == 'treding')
                $products= $products->orderby('views', 'desc');
            if (isset($_GET['constraint'])){
                $q = $_GET['constraint'];
                $products = $products->where(function ($query) use ($q) {
                    if (strpos($q, 'price_-0-50') !== false) {
                        $query->OrwhereBetween('price', [0, 50])->OrwhereBetween('sale_price', [0, 50]);
                    }
                    if (strpos($q, 'price_-50-100') !== false) {
                        $query->OrwhereBetween('price', [50, 100])->OrwhereBetween('sale_price', [50, 100]);
                    }
                    if (strpos($q, 'price_-100-150') !== false) {
                        $query->OrwhereBetween('price', [100, 150])->OrwhereBetween('sale_price', [100, 150]);
                    }
                    if (strpos($q, 'price_-150-200') !== false) {
                        $query->OrwhereBetween('price', [150, 200])->OrwhereBetween('sale_price', [150, 200]);
                    }
                    if (strpos($q, 'price_-200-250') !== false) {
                        $query->OrwhereBetween('price', [200, 250])->OrwhereBetween('sale_price', [200, 250]);
                    }
                    if (strpos($q, 'price_->250') !== false) {
                        $query->Orwhere('price', '>', 250)->Orwhere('sale_price', '>', 250);
                    }
                });
            }
            if(isset($_GET['category'])){
                $category = Category::where('name','=',$_GET['category'])->first();
                $id= $category->id;
                $products=$products->whereHas('categories', function($q) use ($id) {
                    $q->where('category_id', $id);
                })->paginate(15);
            } else
                $products= $products->paginate(15);
            return $products;
        }
    }
?>
