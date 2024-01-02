@php
$dataUser;
    if(isset($admin)){
    return $dataUser=$admin;
    }else if(isset($artisan)){
    return $dataUser=$artisan;
    }else if(isset($client)){
    return $dataUser=$client;
    }else if(isset($user)){
    return $dataUser=$user;
    }  
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Categories</h1>
    <select id="categorySelect">
        <option value="">Select a category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <div id="subcategoryContainer"></div>

    <script>
        $('#categorySelect').on('change', function () {
            var categoryId = $(this).val();

            $.ajax({
                url: '/subcategories/' + categoryId,
                type: 'GET',
                success: function (response) {
                    $('#subcategoryContainer').html(response);
                }
            });
        });
    </script>
</body>
</html>


<div class="form-group">
                            <div class="row">
                                <label class="col-sm-12 col-md-2 col-form-label">Text</label>
                                <label class="col-sm-12 col-md-12">Multiple Select</label>
                                <div class="col-sm-12 col-md-8">
                                
                                <select
                                    name="famille_id"
                                    class="custom-select2 form-control"
                                    {{-- multiple="multiple" --}}
                                    
                                    style="width: 100%"
                                >
                                    @forelse ($familles as $famille)
                                        <option value="{{ $famille->id }}">{{ $famille->nom_famille }}</option>  
                                    @empty
                                    <optgroup label="Aucune Enregistrement Faite">
                                        <option value="AK">Vide</option>                                       
                                    </optgroup>                                        
                                    @endforelse                                 
                                                   
                                </select>
                                </div>
                            
                        
                                <div class=" col-sm-12 col-md-2">
                                <form action="{{ route('home.updateUtils',['utils'=>'familles']) }}" method="POST">
                                    @csrf
                                    @method('put')                         
                                    <div >                             	
                                        <button type="submit" class="btn btn-warning">Modifier</button>                           								
                                    </div>   
                                </form>                         
                                </div>
                                <div class="col-sm-12 col-md-2">                         
                                <div >
                                    <button type="button" class="btn btn-danger">Suprimer</button>									
                                </div>                            
                                </div>
                            </div>
                        </div>
                       

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Single Select</label>
                                <select
                                    class="custom-select2 form-control"
                                    name="state"
                                    style="width: 100%; height: 38px"
                                >
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div> --}}
