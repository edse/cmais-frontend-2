// verifica se a resolução da tela é menor que 800 x 600 e se os sites não são: transito, sic ou cmais-mobile
if ((screen.width * screen.height) / 600 < 800)
{
  classicVersion = getCookie('classic');
  if (classicVersion != "yes")
  {
    if ((window.location.href.indexOf("cmais.com.br/transito") < 0) && (window.location.href.indexOf("fpa.com.br/sic") < 0) && (window.location.href.indexOf("m.cmais.com.br") < 0))
    {
      window.location="http://m.cmais.com.br";
    }
  }
}
