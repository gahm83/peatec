<div id="promo-modal" class="fixed w-full h-full inset-0 z-50 flex flex-col justify-center items-center bg-black/70">
  <div class="w-11/12 max-lg:max-w-[420px] lg:max-w-[768px] flex flex-col justify-center lg:grid lg:grid-cols-[38%_1fr] lg:place-items-stretch">
    <div class="relative aspect-[3/1] rounded-t-[25px] lg:rounded-tr-[0px] lg:rounded-l-[25px] bg-[#652B7C] overflow-hidden">
      <img src="<?php echo get_template_directory_uri() . '/images/image-pop.jpg' ?>" class="w-full h-full inset-0 object-cover object-center">
    </div>
    <div class="flex flex-col justify-center items-center py-6 lg:py-8 bg-[#652B7C] rounded-b-[25px] lg:rounded-bl-[0px] lg:rounded-r-[25px] shadow-lg">
      <h2 class="text-3xl lg:text-4xl text-white font-extrabold mb-4 text-center">40% OFF <span class="block text-2xl lg:text-3xl">en rollitos primavera</span>
      </h2>
      <p class="mb-4 text-[14px] text-white text-center mx-auto w-[327px] max-w-full">Suscríbete a nuestro newsletter y recibe increíbles promociones como esta.</p>
      <form class="flex flex-col justify-center items-center">
        <div class="mb-3 w-[350px] max-w-full">
          <input type="text" id="name" name="name" placeholder="Nombre" class="w-full p-2 border rounded-2xl">
        </div>
        <div class="mb-3 w-[350px] max-w-full">
          <input type="email" id="email" name="email" placeholder="correo" class="w-full p-2 border rounded-2xl">
        </div>
        <div class="mb-4">
          <p class="text-white text-[14px]">Visita nuestros <a href="#" class="text-white underline">Términos y condiciones</a></p>
        </div>
        <button type="submit" class="bg-[#EE3550] text-white py-[10px] px-10 rounded-3xl">Conoce más</button>
      </form>
    </div>
  </div>
  <div class="flex justify-center items-center pt-4">
    <?php get_template_part('components/button', 'close', array('id'=>'close-modal', 'class'=>'')); ?>
  </div>
</div>
