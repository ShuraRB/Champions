<?php
    /**
     * Esta funcion nos va a permitir crear el menu co todas
     * las opciones del menu y sus subseciones en caso de que las tenga
     * [Menu]
     *      [Opcion 1]
     *      [Opcion 2]
     * *      [SubOpcion 2.1]
     * *      [SubOpcion 2.2]
    */

    function configurar_menu_portal($pagina_actual = '') {
        //Arreglo que almacenra todo el menu
        $menu = array();
        //Arreglo que almacenra las opciones del menu
        $menu_opcion = array();
        //Arreglo que almacenra las opciones del menu
        $menu_sub_opcion = array();

        //Pagina Inicio
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_INICIO) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('Inicio');
        $menu_opcion['text'] = 'Inicio';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
        $menu['inicio'] = $menu_opcion;

        //Pagina Catalogo Dama
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_CATEGORIA) ? TRUE : FALSE ;
        $menu_opcion['href'] = '#';
        $menu_opcion['text'] = 'Categoria';
        $menu_opcion['icon'] = 'fa fa-book';
        $menu_opcion['submenu'] = array();
            $menu_sub_opcion = array();
            $menu_sub_opcion['href'] = route_to('Samsung');
            $menu_sub_opcion['text'] = 'Samsung';
            $menu_opcion['submenu']['Samsing'] = $menu_sub_opcion;
            $menu_sub_opcion = array();
            $menu_sub_opcion['href'] = route_to('Apple');
            $menu_sub_opcion['text'] = 'Apple';
            $menu_opcion['submenu']['Apple'] = $menu_sub_opcion;
        $menu['Categoria'] = $menu_opcion;


        //Pagina Galeria
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_GALERIA) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('galeria');
        $menu_opcion['text'] = 'Galeria';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
        $menu['galeria'] = $menu_opcion;

 
        //Pagina Contacto
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($pagina_actual == PAGINA_CONTACTO) ? TRUE : FALSE ;
        $menu_opcion['href'] = route_to('contacto');
        $menu_opcion['text'] = 'Contacto';
        $menu_opcion['icon'] = 'fa fa-address-book';
        $menu_opcion['submenu'] = array();
        $menu['contacto'] = $menu_opcion;


        return $menu;
    }//end configurar_menu_portal

    function crear_menu_portal($pagina_actual = '') {
        $menu = configurar_menu_portal($pagina_actual);
        // d($menu);
        $html='<ul class="navbar-nav ml-auto">';
            foreach ($menu as $opcion) {
                if(sizeof($opcion['submenu']) > 0){
                    $html.='
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="'.$opcion['text'].'" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="'.$opcion['icon'].'" aria-hidden="true"></i> '.$opcion['text'].'</a>
                            <div class="dropdown-menu" aria-labelledby="'.$opcion['text'].'">';
                                foreach ($opcion['submenu'] as $sub_opcion_menu) {
                                    $html.='<a class="dropdown-item" href="'.$sub_opcion_menu['href'].'">'.$sub_opcion_menu['text'].'</a>';
                                }//end foreach
                            $html.='</div>
                        </li>
                    ';
                }//End if 
                else{
                    $html.='<li class="nav-item ';$html .= ($opcion['is_active'] != FALSE) ? 'active' : '' ;$html.='">
                                <a href="'.$opcion['href'].'" class="nav-link">
                                    <i class="'.$opcion['icon'].'" aria-hidden="true"></i> '.$opcion["text"].'
                                </a>
                            </li>';
                }//end else
            }//end foreach
        $html.='</ul>';
        return $html;
    }//end crear_menu_portal
















