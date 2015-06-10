<?php get_header(); ?>

<?php if( have_rows('header_photos') ): ?>
<div id="listing">
  <ul class="bxslider">
<?php while ( have_rows('header_photos') ) : the_row(); ?>      
    <li style="background-image: url(<?php the_sub_field('image'); ?>);" >
      <div class="vert-center">
        <section>
          <h2><?php the_title(); ?></h2>
          <h3><?php $terms = get_the_terms( $post->ID , 'city' ); foreach ( $terms as $term ) { echo $term->name; } ?>, <?php the_field('state'); ?></h3>
        </section>
      </div>
    </li>
<?php endwhile; ?>
  </ul>
</div>
<?php endif;?>
    
<div class="headlinez">
  <section>
    <h3>THE PROPERTY</h3>  
    <?php the_field('content'); ?>
  </section>    
</div>
    
<div class="suite-details">
  <section>
  
    <h3>Available Suites</h3>
      
<?php if( have_rows('suites') ): ?>
      
<table id="suites" class="tablesorter"> 
<thead> 
<tr> 
    <th>Street Address</th> 
    <th>Suite Number </th> 
    <th>Square Footage</th> 
    <th>More Information </th> 
</tr> 
</thead> 
<tbody> 
<?php while ( have_rows('suites') ) : the_row(); ?>  
<tr> 
    <td><?php the_sub_field('street_address'); ?></td> 
    <td><?php the_sub_field('suite_number'); ?></td> 
    <td><?php the_sub_field('square_footage'); ?></td> 
<?php if( get_sub_field('information_pdf') ): ?>
    <td class="download"><a href="<?php the_sub_field('information_pdf'); ?>">Download PDF</a></td> 
<?php else: ?>
    <td><a href="/contact">Contact Us</a></td> 
<?php endif; ?>
</tr> 
<?php endwhile; ?>
</tbody> 
</table> 
<?php endif;?>
      
  </section>    
</div>
    
<div id="mapz">
   <div id="map-canvas"></div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type='text/javascript'>
var map;
  
var MY_MAPTYPE_ID = 'custom_style';

function initialize() {

  var featureOpts = [
    {
        "featureType": "landscape",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "stylers": [
            {
                "hue": "#00aaff"
            },
            {
                "saturation": -100
            },
            {
                "gamma": 2.15
            },
            {
                "lightness": 12
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 24
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 57
            }
        ]
    }
];

  var mapOptions = {
        zoom: 12,
        scrollwheel: false,
        disableDefaultUI: true,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        center: new google.maps.LatLng(<?php the_field('coordinates','options'); ?>),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var styledMapOptions = {
    name: 'Custom Style'
  };

  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
    
  var contentString = '<div class="infowindow"><h4><?php the_title(); ?></h4><?php the_field('street_address'); ?><br /><?php $terms = get_the_terms( $post->ID , 'city' ); foreach ( $terms as $term ) { echo $term->name; } ?>, <?php the_field('state'); ?> <?php the_field('zipcode'); ?><a href="<?php the_field('map_link'); ?>">GET DIRECTIONS ▶</a></div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });    
    

  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
        var iconBase = '<?php bloginfo( 'template_directory' ); ?>/images/';
        var marker= new google.maps.Marker({
          position: new google.maps.LatLng(<?php the_field('coordinates','options'); ?>),
          map: map,
          icon: iconBase + 'map-marker.png' 
        });
    google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
       
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>  
</div>

<?php get_footer(); ?>