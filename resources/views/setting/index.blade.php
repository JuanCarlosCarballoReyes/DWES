@extends('app.base')

@section('title','Argo Create Movie')

@section('content')

<form action="{{ url('setting') }}" method="post">
    
    @method('put')    
    @csrf

    <div id = "spain">
        <h5>Seleccione una provincia de España:</h5>
            <label for="provinciasEspaña">
                <select name="selectProvincias" id="prov">
                <option value="alava" {{ session('selectProvincias') === 'alava' ? 'selected' : '' }}>Álava</option>
                <option value="albacete" {{ session('selectProvincias') === 'albacete' ? 'selected' : '' }}>Albacete</option>
                <option value="alicante" {{ session('selectProvincias') === 'alicante' ? 'selected' : '' }}>Alicante</option>
                <option value="almeria" {{ session('selectProvincias') === 'almeria' ? 'selected' : '' }}>Almería</option>
                <option value="asturias" {{ session('selectProvincias') === 'asturias' ? 'selected' : '' }}>Asturias</option>
                <option value="avila" {{ session('selectProvincias') === 'avila' ? 'selected' : '' }}>Ávila</option>
                <option value="badajoz" {{ session('selectProvincias') === 'badajoz' ? 'selected' : '' }}>Badajoz</option>
                <option value="barcelona" {{ session('selectProvincias') === 'barcelona' ? 'selected' : '' }}>Barcelona</option>
                <option value="burgos" {{ session('selectProvincias') === 'burgos' ? 'selected' : '' }}>Burgos</option>
                <option value="caceres" {{ session('selectProvincias') === 'caceres' ? 'selected' : '' }}>Cáceres</option>
                <option value="cadiz" {{ session('selectProvincias') === 'cadiz' ? 'selected' : '' }}>Cádiz</option>
                <option value="cantabria" {{ session('selectProvincias') === 'cantabria' ? 'selected' : '' }}>Cantabria</option>
                <option value="castellon" {{ session('selectProvincias') === 'castellon' ? 'selected' : '' }}>Castellón</option>
                <option value="ciudad-real" {{ session('selectProvincias') === 'ciudad-real' ? 'selected' : '' }}>Ciudad Real</option>
                <option value="cordoba" {{ session('selectProvincias') === 'cordoba' ? 'selected' : '' }}>Córdoba</option>
                <option value="cuenca" {{ session('selectProvincias') === 'cuenca' ? 'selected' : '' }}>Cuenca</option>
                <option value="gerona" {{ session('selectProvincias') === 'gerona' ? 'selected' : '' }}>Gerona (Girona)</option>
                <option value="granada" {{ session('selectProvincias') === 'granada' ? 'selected' : '' }}>Granada</option>
                <option value="guadalajara" {{ session('selectProvincias') === 'guadalajara' ? 'selected' : '' }}>Guadalajara</option>
                <option value="guipuzcoa" {{ session('selectProvincias') === 'guipuzcoa' ? 'selected' : '' }}>Guipúzcoa (Gipuzkoa)</option>
                <option value="huelva" {{ session('selectProvincias') === 'huelva' ? 'selected' : '' }}>Huelva</option>
                <option value="huesca" {{ session('selectProvincias') === 'huesca' ? 'selected' : '' }}>Huesca</option>
                <option value="jaen" {{ session('selectProvincias') === 'jaen' ? 'selected' : '' }}>Jaén</option>
                <option value="la-rioja" {{ session('selectProvincias') === 'la-rioja' ? 'selected' : '' }}>La Rioja</option>
                <option value="las-palmas" {{ session('selectProvincias') === 'las-palmas' ? 'selected' : '' }}>Las Palmas</option>
                <option value="leon" {{ session('selectProvincias') === 'leon' ? 'selected' : '' }}>León</option>
                <option value="lleida" {{ session('selectProvincias') === 'lleida' ? 'selected' : '' }}>Lérida (Lleida)</option>
                <option value="lugo" {{ session('selectProvincias') === 'lugo' ? 'selected' : '' }}>Lugo</option>
                <option value="madrid" {{ session('selectProvincias') === 'madrid' ? 'selected' : '' }}>Madrid</option>
                <option value="malaga" {{ session('selectProvincias') === 'malaga' ? 'selected' : '' }}>Málaga</option>
                <option value="murcia" {{ session('selectProvincias') === 'murcia' ? 'selected' : '' }}>Murcia</option>
                <option value="navarra" {{ session('selectProvincias') === 'navarra' ? 'selected' : '' }}>Navarra</option>
                <option value="orense" {{ session('selectProvincias') === 'orense' ? 'selected' : '' }}>Orense (Ourense)</option>
                <option value="palencia" {{ session('selectProvincias') === 'palencia' ? 'selected' : '' }}>Palencia</option>
                <option value="pontevedra" {{ session('selectProvincias') === 'pontevedra' ? 'selected' : '' }}>Pontevedra</option>
                <option value="salamanca" {{ session('selectProvincias') === 'salamanca' ? 'selected' : '' }}>Salamanca</option>
                <option value="santa-cruz-de-tenerife" {{ session('selectProvincias') === 'santa-cruz-de-tenerife' ? 'selected' : '' }}>Santa Cruz de Tenerife</option>
                <option value="segovia" {{ session('selectProvincias') === 'segovia' ? 'selected' : '' }}>Segovia</option>
                <option value="sevilla" {{ session('selectProvincias') === 'sevilla' ? 'selected' : '' }}>Sevilla</option>
                <option value="soria" {{ session('selectProvincias') === 'soria' ? 'selected' : '' }}>Soria</option>
                <option value="tarragona" {{ session('selectProvincias') === 'tarragona' ? 'selected' : '' }}>Tarragona</option>
                <option value="teruel" {{ session('selectProvincias') === 'teruel' ? 'selected' : '' }}>Teruel</option>
                <option value="toledo" {{ session('selectProvincias') === 'toledo' ? 'selected' : '' }}>Toledo</option>
                <option value="valencia" {{ session('selectProvincias') === 'valencia' ? 'selected' : '' }}>Valencia</option>
                <option value="valladolid" {{ session('selectProvincias') === 'valladolid' ? 'selected' : '' }}>Valladolid</option>
                <option value="vizcaya" {{ session('selectProvincias') === 'vizcaya' ? 'selected' : '' }}>Vizcaya (Bizkaia)</option>
                <option value="zamora" {{ session('selectProvincias') === 'zamora' ? 'selected' : '' }}>Zamora</option>
                <option value="zaragoza" {{ session('selectProvincias') === 'zaragoza' ? 'selected' : '' }}>Zaragoza</option>
                </select>
            </label>
    </div>
    
    <div id = "europe">
        <h5>Seleccione un país de Europa:</h5>
            <label for="paisesEuropa">
            <select name="selectPaises" id="paises">
                <option value="albania" {{ session('selectPaises') === 'albania' ? 'selected' : '' }}>Albania</option>
                <option value="alemania" {{ session('selectPaises') === 'alemania' ? 'selected' : '' }}>Alemania</option>
                <option value="andorra" {{ session('selectPaises') === 'andorra' ? 'selected' : '' }}>Andorra</option>
                <option value="austria" {{ session('selectPaises') === 'austria' ? 'selected' : '' }}>Austria</option>
                <option value="belgica" {{ session('selectPaises') === 'belgica' ? 'selected' : '' }}>Bélgica</option>
                <option value="bielorrusia" {{ session('selectPaises') === 'bielorrusia' ? 'selected' : '' }}>Bielorrusia</option>
                <option value="bosnia_herzegovina" {{ session('selectPaises') === 'bosnia_herzegovina' ? 'selected' : '' }}>Bosnia y Herzegovina</option>
                <option value="bulgaria" {{ session('selectPaises') === 'bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                <option value="chipre" {{ session('selectPaises') === 'chipre' ? 'selected' : '' }}>Chipre</option>
                <option value="croacia" {{ session('selectPaises') === 'croacia' ? 'selected' : '' }}>Croacia</option>
                <option value="dinamarca" {{ session('selectPaises') === 'dinamarca' ? 'selected' : '' }}>Dinamarca</option>
                <option value="eslovaquia" {{ session('selectPaises') === 'eslovaquia' ? 'selected' : '' }}>Eslovaquia</option>
                <option value="eslovenia" {{ session('selectPaises') === 'eslovenia' ? 'selected' : '' }}>Eslovenia</option>
                <option value="españa" {{ session('selectPaises') === 'españa' ? 'selected' : '' }}>España</option>
                <option value="estonia" {{ session('selectPaises') === 'estonia' ? 'selected' : '' }}>Estonia</option>
                <option value="finlandia" {{ session('selectPaises') === 'finlandia' ? 'selected' : '' }}>Finlandia</option>
                <option value="francia" {{ session('selectPaises') === 'francia' ? 'selected' : '' }}>Francia</option>
                <option value="grecia" {{ session('selectPaises') === 'grecia' ? 'selected' : '' }}>Grecia</option>
                <option value="hungria" {{ session('selectPaises') === 'hungria' ? 'selected' : '' }}>Hungría</option>
                <option value="irlanda" {{ session('selectPaises') === 'irlanda' ? 'selected' : '' }}>Irlanda</option>
                <option value="islandia" {{ session('selectPaises') === 'islandia' ? 'selected' : '' }}>Islandia</option>
                <option value="italia" {{ session('selectPaises') === 'italia' ? 'selected' : '' }}>Italia</option>
                <option value="letonia" {{ session('selectPaises') === 'letonia' ? 'selected' : '' }}>Letonia</option>
                <option value="liechtenstein" {{ session('selectPaises') === 'liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                <option value="lituania" {{ session('selectPaises') === 'lituania' ? 'selected' : '' }}>Lituania</option>
                <option value="luxemburgo" {{ session('selectPaises') === 'luxemburgo' ? 'selected' : '' }}>Luxemburgo</option>
                <option value="malta" {{ session('selectPaises') === 'malta' ? 'selected' : '' }}>Malta</option>
                <option value="moldavia" {{ session('selectPaises') === 'moldavia' ? 'selected' : '' }}>Moldavia</option>
                <option value="monaco" {{ session('selectPaises') === 'monaco' ? 'selected' : '' }}>Mónaco</option>
                <option value="montenegro" {{ session('selectPaises') === 'montenegro' ? 'selected' : '' }}>Montenegro</option>
                <option value="noruega" {{ session('selectPaises') === 'noruega' ? 'selected' : '' }}>Noruega</option>
                <option value="paises_bajos" {{ session('selectPaises') === 'paises_bajos' ? 'selected' : '' }}>Países Bajos</option>
                <option value="polonia" {{ session('selectPaises') === 'polonia' ? 'selected' : '' }}>Polonia</option>
                <option value="portugal" {{ session('selectPaises') === 'portugal' ? 'selected' : '' }}>Portugal</option>
                <option value="reino_unido" {{ session('selectPaises') === 'reino_unido' ? 'selected' : '' }}>Reino Unido</option>
                <option value="republica_checa" {{ session('selectPaises') === 'republica_checa' ? 'selected' : '' }}>República Checa</option>
                <option value="rumania" {{ session('selectPaises') === 'rumania' ? 'selected' : '' }}>Rumanía</option>
                <option value="rusia" {{ session('selectPaises') === 'rusia' ? 'selected' : '' }}>Rusia</option>
                <option value="san_marino" {{ session('selectPaises') === 'san_marino' ? 'selected' : '' }}>San Marino</option>
                <option value="serbia" {{ session('selectPaises') === 'serbia' ? 'selected' : '' }}>Serbia</option>
                <option value="suecia" {{ session('selectPaises') === 'suecia' ? 'selected' : '' }}>Suecia</option>
                <option value="suiza" {{ session('selectPaises') === 'suiza' ? 'selected' : '' }}>Suiza</option>
                <option value="ucrania" {{ session('selectPaises') === 'ucrania' ? 'selected' : '' }}>Ucrania</option>
                <option value="vaticano" {{ session('selectPaises') === 'vaticano' ? 'selected' : '' }}>Ciudad del Vaticano</option>
            </select>
            </label> 
    </div>
    
    <br> <br>
    <button type="submit" class="btn btn-primary">Save setting</button>
</form>

@endSection