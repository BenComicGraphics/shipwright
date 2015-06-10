<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<div id="header-image" class="vert-bottom" style="background-image:url(<?php echo $feat_image; ?>)">
  <section>
    <h2><?php the_title(); ?></h2>
  </section>    
</div>
    
<div id="contact-page">
  <section>
    <div class="row">
    <div class="map-holder box-1-2">
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
    
  var contentString = '<div class="infowindow"><h4>Harkinson Investment Corp.</h4><?php the_field('street_address', 'options'); ?><a href="<?php the_field('maps_link', 'options'); ?>">GET DIRECTIONS ▶</a></div>';

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
    <div class="contact-info box-1-2">
      <h3>Contact Our Team</h3>  
      <address class="twocol"> 
        <?php if(get_field('street_address','options')){ ?><a href="<?php the_field('maps_link', 'options'); ?>"><?php the_field('street_address', 'options'); ?></a><?php } ?><br />
        <?php if(get_field('phone_number','options')){ ?>P: <a href="tel:<?php the_field('phone_number','options'); ?>"><?php the_field('phone_number','options'); ?></a><?php } ?><br />
      <?php if(get_field('email_address','options')){ ?>E: <a href="mailto:<?php the_field('email_address','options'); ?>"><?php the_field('email_address','options'); ?></a><?php } ?><br />
      </address>    
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>     
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div>
    </div>
  </section>    
</div>

<?php get_footer(); ?>