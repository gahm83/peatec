<div class="relative pb-6 lg:pb-0 lg:space-y-6">
  <div class="flex justify-center max-lg:transform max-lg:-translate-y-1/2 mb-4">
    <span class="block bg-[#EE3550] px-3 rounded-l-full rounded-r-full text-white text-sm uppercase"><?php echo esc_html($args['motivo_del_cupon']); ?></span>
  </div>
  <div class="text-center space-y-2 lg:space-y-4">
    <h2 class="text-4xl lg:text-[64px] font-bold text-white"><?php echo esc_html($args['cantidad_porcentaje_del_cupon']); ?></h2>
    <p><strong class="block text-2xl text-white"><?php echo esc_html($args['productos_en_que_aplica']); ?></strong></p>
    <div class="w-2/3 mx-auto text-[#652B7C]">
      <p><?php echo esc_html($args['resumen_de_terminos']); ?></p>
    </div>
  </div>
</div>