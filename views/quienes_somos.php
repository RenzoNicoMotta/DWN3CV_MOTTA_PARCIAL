<div class="d-flex justify-content-center p-5 general">
  <div>
    <h1 class="text-center mb-5 fw-bold fs-3 fs-md-1">
      ¡Un gusto!<br>
      ¡Somos la tienda de Pokémon más emocionante del mundo!
    </h1>
    <div class="row mb-5 d-flex align-items-center">
      <div class="col-12 mb-5">
        <img src="img/quienessomos.jpg" class="d-block mx-auto img-fluid centro">
      </div>
      <div class="col-md-6">
        <div class="fs-5">
          <p>Somos un equipo de entrenadores dedicados que se especializan en la venta de Pokémon de alta calidad y de confianza. ¡Desde el adorable Pikachu hasta el poderoso Charizard, tenemos todos los Pokémon que puedas imaginar!</p>
          <p>Nuestros Pokémon provienen de criadores expertos de todo el mundo y se tratan con el máximo cuidado y respeto. Trabajamos duro para asegurarnos de que todos nuestros Pokémon estén en las mejores condiciones posibles para que puedan estar listos para su nuevo hogar contigo.</p>
          <p>Además de nuestros Pokémon a la venta, también ofrecemos una variedad de suministros y accesorios para ayudarte a cuidar y entrenar a tu nuevo compañero de Pokémon. Desde Poké Balls hasta pociones curativas, tenemos todo lo que necesitas para asegurarte de que tu Pokémon esté en la mejor forma posible.</p>
          <p>En nuestra tienda, también ofrecemos una experiencia única de compra de Pokémon. Si estás buscando un Pokémon en particular, puedes venir y hablar con nuestros entrenadores expertos que estarán encantados de ayudarte a encontrar el Pokémon adecuado para ti. También organizamos eventos y torneos de entrenamiento para que puedas conocer a otros entrenadores y mejorar tus habilidades de entrenamiento de Pokémon.</p>
          <p>Gracias por visitar nuestra tienda de Pokémon. Esperamos que encuentres el Pokémon perfecto para ti y que tengas una experiencia inolvidable aquí en nuestra tienda. ¡Atrapalos a todos!</p>
        </div>
      </div>
    </div>
    <h1 class="fs-3 fs-md-1">Contacto Pokemon</h1>
    <form class="formu" action="procesar.php" method="get">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" class="form-control" pattern="[0-9]{10}" required>
          </div>
          <div class="form-group">
            <label for="region">Región:</label>
            <input type="text" id="region" name="region" required>
          </div>
          <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad" required>
          </div>
          <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
          </div>
          <div class="form-group">
            <label for="pokemon_favorito">Pokémon favorito:</label>
            <input type="text" id="pokemon_favorito" name="pokemon_favorito" required>
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
          </div>
          <input type="submit" value="Enviar">
    </form>
  </div>
</div>