          <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">
              Ejemplo de formulario de registro
          </p>
          <form id="formulario" method="POST" action="/" class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            <div class="mb-4 grid md:grid-cols-2 sm:grid-cols-12  gap-4">

            <div>
                <label for="" style="color:white;">Nombre</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="1"
                type="text"
                name="name"
                placeholder="Nombre"
                required
              />
            </div>
            <div>
                <label for="" style="color:white;">Apellidos</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="2"
                name="apellidos"
                type="text"
                placeholder="Apellidos"
                required
              />
            </div>
            <div>
                <label for="" style="color:white;">Dirección</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="3"
                type="text"
                name="direccion"
                placeholder="Dirección"
                required
              />
            </div>
            <div>
                <label for="" style="color:white;">Telefono</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="4"
                type="text"
                name="telefono"
                placeholder="Telefono"
                required
              />
            </div>
            <div>
                <label for="" style="color:white;">Correo Electronico</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="5"
                type="email"
                name="email"
                placeholder="Correo Electronico"
                required

              />
            </div>
            <div>

                <label for="" style="color:white;">Mensaje</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="6"
                name="mensaje"
                type="text"
                placeholder="Mensaje"
                required
              />
            </div>
            <div>
                <label for="" style="color:white;">Nota 1</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="7"
                type="number"
                placeholder="nota 1"
                name="n1"
                required
              />
            </div>
            <div>
                <label for="" style="color:white;">Nota 2</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="8"
                type="number"
                name="n2"
                placeholder="nota 2"
                required
              />
            </div>
            <div>
                <label for="" style="color:white;">Nota 3</label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="9"
                type="number"
                name="n3"
                placeholder="nota 3"
                required
              />
            </div>
            </div>

            <div class="flex items-center justify-between pt-4">
              <input
              type="submit"
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                value="Enviar!"
              >
            </input>
            </div>
          </form>