<?php 

function template1( $halaman, $data)
{
    
    echo view('toko/templates/headerbody',$data);
    echo view('toko/templates/headermidle',$data );
    echo view('toko/templates/headerbottom',$data );
    echo view('toko/templates/indextemp/slider',$data );
    echo view('toko/templates/indextemp/sideleftbar1',$data );
    echo view($halaman,$data);
    echo view('toko/templates/indextemp/sideleftbar2',$data );
    echo view('toko/templates/footer',$data );

    // return 'ok';
}

function template2( $halaman, $data)
{
    
    echo view('toko/templates/headerbody',$data);
    echo view('toko/templates/headermidle',$data );
    echo view('toko/templates/headerbottom',$data );
    echo view('toko/templates/indextemp/sideleftbar1',$data );
    echo view($halaman,$data);
    echo view('toko/templates/indextemp/sideleftbar2',$data );
    echo view('toko/templates/footer',$data );

    // return 'ok';
}

function template3( $halaman, $data)
{
    
    echo view('toko/templates/headerbody',$data);
    echo view('toko/templates/headermidle',$data );
    echo view('toko/templates/headerbottom',$data );
    echo view($halaman,$data);
    echo view('toko/templates/footer',$data );

    // return 'ok';
}
