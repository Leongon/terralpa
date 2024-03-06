const cliente = [
  {src:'https://drive.google.com/uc?id=1KsYz1SdIWE3TWa-xJO0lh8RYhfitpdnh'},
  {src:'https://drive.google.com/uc?id=16sp2xN_fFldvX2x1zfrNqIX7YixUGSsO'},
  {src:'https://drive.google.com/uc?id=1xqS7iP9o7XuhFcdE2pQeqaovlDbG7igf'},
  {src:'https://drive.google.com/uc?id=1PHQtsLHL-hcUCmXg__jrFoKxx8yRSvtH'},
  {src:'https://drive.google.com/uc?id=1B-O7b_LeThWwBYmkEgIe83egxwYGDzdi'},
  {src:'https://drive.google.com/uc?id=1km53NXFQcsb982by0C9rV1yseohJVzsk'},
  {src:'https://drive.google.com/uc?id=1b585H7Pi0SIs_giZG1NrQTWXbtNZRrXX'},
  {src:'https://drive.google.com/uc?id=1XgZrGpS0WkI5ngkhGKOIBgdr0paqyIDd'},
  {src:'https://drive.google.com/uc?id=1ugF3E50K7i7QzLLLaRe2cidYztxn1Jed'},
  {src:'https://drive.google.com/uc?id=1VvCCrT5DxTvkC5M8c3Qoc_oawSCbyfLL'},
  {src:'https://drive.google.com/uc?id=1n-8M8MQLbjvSqW9iHHFC-LxZ0aR-yKkO'},
  {src:'https://drive.google.com/uc?id=1KG2_RJEH6ctwGfEteTjLseZ0PSBHnP2D'},
  {src:'https://drive.google.com/uc?id=1y2rzDZIN5rbpXAnUWPEkHoOuHLMxoS1N'},
  {src:'https://drive.google.com/uc?id=1kCmXsDdFpuT1frI-HTLvxWi_ur2LYyFr'},
  {src:'https://drive.google.com/uc?id=1cZ2OsUAteb76y-7f-7wrdmUR2AfAFT06'},
  {src:'https://drive.google.com/uc?id=1o5t2XQpEIXzxz9-396EtkWiFh7pXZf-f'},
  {src:'https://drive.google.com/uc?id=1vwo9RJPKUOA__D3BwL15BMroruBUrBuC'},
  {src:'https://drive.google.com/uc?id=1yMQwnaizss9ot7GrXdmXyCKiDgDDl0PE'},
  {src:'https://drive.google.com/uc?id=1T8Rm29abLySIWezyUiubN-kDKNq2FH0Z'},
  
   
  ];

  async function renderizarGaleria(imagenes) {
    let html = ``;

    imagenes.forEach(function (imagen) {
        html += ` <div class="item">
        <h2>Free</h2>
      </div>
`;
    });
    img =  document.querySelector(".card-item")
    img.innerHTML =  html;


}

