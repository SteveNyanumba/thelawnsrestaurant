<template>

</template>

<script>
export default {

}
</script>

<style>

</style>
<template>
  <app-layout>
      <slider-section></slider-section>
      <order-section></order-section>
  </app-layout>
</template>

<script>
export default {
    mounted(){
        this.contentWaypoint()
    },
    methods:{
        contentWaypoint(){
                var i = 0;
                $('.nos-animate').waypoint( function( direction ) {

                    if( direction === 'down' && !$(this.element).hasClass('nos-animated') ) {

                        i++;

                        $(this.element).addClass('item-animate');
                        setTimeout(function(){

                            $('body .nos-animate.item-animate').each(function(k){
                                var el = $(this);
                                setTimeout( function () {
                                    var effect = el.data('animate-effect');
                                    if ( effect === 'fadeIn') {
                                        el.addClass('fadeIn nos-animated');
                                        el.removeClass('nos-animate')
                                    } else if ( effect === 'fadeInLeft') {
                                        el.addClass('fadeInLeft nos-animated');
                                        el.removeClass('nos-animate')
                                    } else if ( effect === 'fadeInRight') {
                                        el.addClass('fadeInRight nos-animated');
                                        el.removeClass('nos-animate')
                                    } else {
                                        el.addClass('fadeInUp nos-animated');
                                        el.removeClass('nos-animate')
                                    }
                                    el.removeClass('item-animate');
                                },  k * 50, 'easeInOutExpo' );
                            });

                        }, 100);

                    }

                } , { offset: '95%' } );
            }
    }
}
</script>

<style>

</style>
