document.querySelector("#loginForm").addEventListener("submit", function (e) {
  e.preventDefault();
  login();
});

async function login() {
  let loginForm = document.querySelector("#loginForm");
  const datos = new FormData(loginForm);
  try {
    const url = `${base_url}/Login/ingresar`;
    const respuesta = await fetch(url, {
      method: "POST",
      body: datos,
    });
    const resultado = await respuesta.json();

    if (resultado.error) {
      swal(
        {
            type: 'error',
            title: 'Oops...',
            text:`${resultado.error}`,
        }
    )
      
    } else {
      window.location.href = `${base_url}/Productos`;
    }
  } catch (err) {
    console.log(err);
  }
}
