btn_nuevo_usuario = document.querySelector(".btn-nuevo-usuario");
btn_detalle_usuario = document.querySelector(".btn-detalle-usuario");
var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), options)



btn_nuevo_usuario.addEventListener("click", (e) => {
  console.log("dsads")
  myModal.show()
})

btn_detalle_usuario.addEventListener("click", (e) => {
  console.log(e)
})

const estado = "";


async function save() {

  event.preventDefault();
  formRegister = document.querySelector("#formRegister")
  let datos = new FormData(formRegister);
  try {
    const url = `${base_url}/Register/save`;
    axios({
      method: 'post',
      url: url,
      data: datos
    })

      .then(function (response) {
        console.log(response)
        resultado = response.data;
        if (resultado.status) {
          new Noty({
            type: 'success',
            text: `${resultado.msg}`,
            layout: "topCenter",
            theme: "metroui",
            timeout: 1500
          }).show();
          formRegister.reset();
          location.reload();
        } else {
          new Noty({
            type: 'error',
            text: `${resultado.error}`,
            layout: "topCenter",
            theme: "metroui",
            timeout: 1500
          }).show();
        }

      });
  } catch (error) {

  }

}

async function actualizar() {

  event.preventDefault();
  formRegister = document.querySelector("#formRegister")
  let datos = new FormData(formRegister);

  try {
    const url = `${base_url}/Register/update`;
    axios({
      method: 'post',
      url: url,
      data: datos
    })

      .then(function (response) {
        console.log(response)
        resultado = response.data;
        if (resultado.status) {
          new Noty({
            type: 'success',
            text: `${resultado.msg}`,
            layout: "topCenter",
            theme: "metroui",
            timeout: 1500
          }).show();
          formRegister.reset();

        } else {
          new Noty({
            type: 'error',
            text: `${resultado.error}`,
            layout: "topCenter",
            theme: "metroui",
            timeout: 1500
          }).show();
        }

      });
  } catch (error) {

  }

}
async function eliminar() {

  event.preventDefault();
  formRegister = document.querySelector("#formRegister")
  let datos = new FormData(formRegister);

  try {
    const url = `${base_url}/Register/delet`;
    axios({
      method: 'post',
      url: url,
      data: datos
    })

      .then(function (response) {
        console.log(response)
        resultado = response.data;
        console.log(response.data)
        if (resultado.status) {
          new Noty({
            type: 'success',
            text: `${resultado.msg}`,
            layout: "topCenter",
            theme: "metroui",
            timeout: 1500
          }).show();
          formRegister.reset();

        } else {
          new Noty({
            type: 'error',
            text: `${resultado.error}`,
            layout: "topCenter",
            theme: "metroui",
            timeout: 1500
          }).show();
        }

      });
  } catch (error) {

  }

}
