<a href="/collections" title="">
        <span>Collections</span></a>
    <a class="btnCaret hidden-xl hidden-lg hidden-md" data-toggle="collapse"
        href="#megaDropdown22"></a>

    <div id="megaDropdown22" class="menuDropdown megaMenu collapse">
        <div class="menuGroup row">

            <div class="col-sm-12">
                <div class="row">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="velaMenuListCollection">
                    <div class="velaMenuListContent rowFlex">
                           @foreach($categories as $category)
                             @include('components.coll-item',['category'=>$category])
                           @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>