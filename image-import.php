<?php
/**
* Template Name: Aws Page
*
*/
get_header();

// $query_images_args = array(
//     'post_type'      => 'post',
//     'post_status'    => 'publish',
//     'posts_per_page' => - 1,
// );

// $query_images = new WP_Query( $query_images_args );

// // $images = array();
// foreach ( $query_images->posts as $image ) {
//     if( 0 == get_post_thumbnail_id( $image->ID ) ){
//         set_post_thumbnail( $image->ID, 1195 );
//     }
// }

// print_r($images);


// $arr = array("4568"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/07/Modern-door-Desings-01.jpg","4512"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/07/Praveen_06-copy.jpg","4488"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/07/2000sqft-home-plans.jpg","4207"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/07/shutterstock_393989602.jpg","4422"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/07/lOADING-AND-UNLOADING-RATES-IN-KERALA-Malayalam.jpg","4404"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/07/Autumn-styling.jpg","4293"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/02/pexels-photo-323705.jpeg","3149"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/01.jpg","1325"=>"https://demo.trianglehomez.com/wp-content/uploads/2017/12/George-blog.jpg","2018"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/01/Sreepranavam.jpg","3298"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/modern-door-designs-for-rooms-6-7669.jpg","4218"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/10/photo-1530545233050-3f0a5d0dd1ac.jpg","4192"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/wall-decoration.jpg","4179"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/94230537.jpg","4163"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/15825752613_e3b4490bc5_b.jpg","4150"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/bathroom-2658996_960_720.jpg","4114"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/люстра-подсвечник-1-825x549.jpg","4109"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/07/home-natural-light.jpg","4065"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/C_Users_user_AppData_Local_Packages_Microsoft.SkypeApp_kzf8qxf38zg5c_LocalState_711402d6-1cea-470c-9ed2-a2ef508ded81.jpg","4061"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/418258182_3c49477f94_b.jpg","4052"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/dining-room-1158266_960_720.jpg","4047"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/151019-F-OG534-703.jpg","4044"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/18-monsoon-care-tips-for-your-home_RH_RS_FINAL-lead__1295057829.jpg","4038"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/Beautify-home.jpg","4035"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/construction-services.jpeg","4006"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/Kerala-homes.jpg","3991"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/07/traditional-indian-home-interiors-11.jpg","3965"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/07/affordable-ways-to-build-a-house-copy.jpg","3937"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/06/Important-principles-of-interior-designing-small-size-min.jpg","3887"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/06/How-to-Maintain-a-Swimming-Pool-Image-1080x675.jpeg","3845"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/05/futuristic-bathroom-sink-looking-for-219-lightinthebox-sprinkle-futuristic-color-changing-led-futuristic-bathroom-sink.png-e1528903783671.jpg","3549"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/04/big-copy.jpg","4227"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/11/10-Affordable-Home-Improvements-Ideas-feature-image-1-1024x576-copy.jpg","3372"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/6a00e55397a5c2883401b8d0e145c4970c.jpg","3328"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/Interior-design-phases.jpg","3120"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/tr-home-blog.jpg","3043"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/02/home-and-building-designers.jpg","4306"=>"https://demo.trianglehomez.com/wp-content/uploads/2019/02/security-protection-anti-virus-software-60504.jpeg","2744"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/02/118_03.jpg","3446"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/04/58b7e08d1a00003400f41275.jpeg","3081"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/02/COVER.jpg","2206"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/01/Budget-home-design.png","3096"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/MATTERPORT-TO-FLOORPLANNER.jpg","3319"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/Case20CX470C.jpg","3420"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/04/8411255_orig.jpg","4262"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/12/pexels-photo-534171.jpeg","3048"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/02/Large.jpg","3058"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/02/images.jpg","4186"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/photo-1529250998-f63edc32300c.jpg","3977"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/07/shutterstock_570818761.jpg","3724"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/05/Kerala-Labour-Union-Rates.jpg","3802"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/05/VASTU.jpg","3176"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/IMG_7761-5184x3456.jpg","4239"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/12/Flame-Triangle.jpeg","4125"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/09/house-insurance_1.jpg","4013"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/08/VastuShastramm.jpg","3902"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/06/Crockery-Shelf_02.jpg","3183"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/manufactured-sand.jpg","2010"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/01/06.jpg","3357"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/Designer.jpg","2079"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/01/Sridhar_01.jpg","1625"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/01/13124780_1725918061019352_2788114155418582777_n.jpg","1603"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/01/Grade-of-Concrete.png","1395"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/01/Toilet-01-copy.jpg","3138"=>"https://demo.trianglehomez.com/wp-content/uploads/2018/03/plastering-1.jpg");

// print_r($arr);
// foreach ($arr as $key => $value) {
//     $r = explode('/',$value);
//     $image_name =  end($r);
//     // echo '<br>';
//     // echo $value;
//     // echo '<br>';
//     // echo $key;
//     // echo '<br>';
//     // echo $image_name;

//     // ssisls_fnckcik( $value, 'Praveen_06-copy.jpg', $key );

// }

// $rtt = ssisls_fnckcik('https://demo.trianglehomez.com/wp-content/uploads/2019/07/Praveen_06-copy.jpg', 'Praveen_06-copy.jpg' );
// print_r($rtt);


//  function ssisls_fnckcik( $image_url, $image_name , $post_id ) {

//     $upload_dir       = wp_upload_dir(); // Set upload folder
//     $image_data       = file_get_contents($image_url); // Get image data
//     $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
//     $filename         = basename( $unique_file_name ); // Create image file name

//     // Check folder permission and define file location
//     if( wp_mkdir_p( $upload_dir['path'] ) ) {
//         $file = $upload_dir['path'] . '/' . $filename;
//     } else {
//         $file = $upload_dir['basedir'] . '/' . $filename;
//     }

//     // Create the image  file on the server
//     file_put_contents( $file, $image_data );

//     // Check image file type
//     $wp_filetype = wp_check_filetype( $filename, null );

//     // Set attachment data
//     $attachment = array(
//         'post_mime_type' => $wp_filetype['type'],
//         'post_title'     => sanitize_file_name( $filename ),
//         'post_content'   => '',
//         'post_status'    => 'inherit'
//     );

//     // Create the attachment
//     $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

//     // Include image.php
//     require_once(ABSPATH . 'wp-admin/includes/image.php');

//     // Define attachment metadata
//     $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

//     // Assign metadata to attachment
//     wp_update_attachment_metadata( $attach_id, $attach_data );

//     // And finally assign featured image to post
//     set_post_thumbnail( $post_id, $attach_id );
//     return $attach_id;
//  }











// $rt = app_upload_url_from_url( 'https://demo.trianglehomez.com/wp-content/uploads/2019/07/Praveen_06-copy.jpg', 'Praveen_06-copy.jpg');
// print_r($rt);
// function app_upload_url_from_url( $thumb_url, $filename ) {

//         $default_id = 2200;

//          if (empty($thumb_url)){
//             return $default_id;
//         }

//             $b64image = base64_encode(file_get_contents($thumb_url));
//             $upload_dir = wp_upload_dir();
            
//             $upload_path = str_replace( '/', DIRECTORY_SEPARATOR, $upload_dir['path'] ) . DIRECTORY_SEPARATOR;

//             $decoded = base64_decode($b64image);

//             $hashed_filename = $filename;
//             $image_upload = file_put_contents( $upload_path . $hashed_filename, $decoded );

//             //HANDLE UPLOADED FILE
//             if( !function_exists( 'wp_handle_sideload' ) ) {
//               require_once( ABSPATH . 'wp-admin/includes/file.php' );
//             }

//             // Without that I'm getting a debug error!?
//             if( !function_exists( 'wp_get_current_user' ) ) {
//               require_once( ABSPATH . 'wp-includes/pluggable.php' );
//             }
//             $file             = array();
//             $file['error']    = '';
//             $file['tmp_name'] = $upload_path . $hashed_filename;
//             $file['name']     = $hashed_filename;
//             $file['type']     = 'image/png';
//             $file['size']     = filesize( $upload_path . $hashed_filename );

//             // upload file to server
//             // use $file instead of $image_upload
//             $file_return = wp_handle_sideload( $file, array( 'test_form' => false ) );
            
//             $wp_upload_dir = wp_upload_dir();

//             $filename = $file_return['file'];

//             $attachment = array(
//                      'post_mime_type' => $file_return['type'],
//                      'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
//                      'post_content' => '',
//                      'post_status' => 'inherit',
//                      'guid' => $wp_upload_dir['url'] . '/' . basename($filename)
//                      );


//             $attach_id = wp_insert_attachment( $attachment, $filename );
//             /// generate thumbnails of newly uploaded image
//             echo 'XX' .  $wp_upload_dir['path'] . '/' . basename( $filename ) . 'YY';

//             $attachment_meta = wp_generate_attachment_metadata( $attach_id,  $wp_upload_dir['path'] . '/' . basename( $filename ) );
//             echo '11';
//         if ( is_wp_error($attachment_meta) ) {
//             print_r($attachment_meta);
//         }
//          print_r($attachment_meta);

//             wp_update_attachment_metadata($attach_id,$attachment_meta);


//         if ( is_wp_error($attach_id) ) {
//             return $default_id;
//         }

//         if(!is_wp_error($attach_id)) {
//             return $attach_id;
//         }
//     }

// // function pippin_get_image_id($image_url) {
// //     global $wpdb;
// //     $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url ));
// //     if($attachment) {
// //         return $attachment[0]; 
// //     } else {
// //         return 0;
// //     }
// // }

get_footer();
?>
