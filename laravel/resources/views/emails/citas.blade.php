
<table width="600" style="background-color:#FFFFFF;padding:0;margin:15px auto;" cellspading="0" cellspacing="0" border="0">
  <tbody>
    <tr>
      <td align="center" style="padding:25px 0;background-color:{{setting('site.colorbase')}};border-bottom:#fff solid 1px;"><img src="{{asset('storage/' . setting('site.logo'))}}"></td>
    </tr>
    <tr>

      <td>
        <div style="overflow:hidden;width:600px;height:30px;">

          <div style="width:610px;height:32px;margin-left:-5px;box-shadow:inset 0px 5px 5px 1px #c0c0c0;"></div>
        </div>
      </td>
    </tr>
    <tr>
      <td style="padding:20px 36px 40px 36px;color:#4e4e4e;">
        <h3 style="font-size:20px;font-family:arial,verdana,tahoma,sans-serif;font-weight:normal;color:#1a2e3b;text-align:center;margin:20px 0;">Formulario de Contacto</h3>
        <p style="font-size:15px;font-family:arial,verdana,tahoma,sans-serif;margin:0;color:#444444;line-height:25px;">Se ha mandado un comentario con la siguiente información:<br/>
          <br />
          <hr />
          <table cellpadding="5">
            <tr><td width="250">Nombre:</td><td>{{$mensaje->nombre}}</td></tr>
            <tr><td width="250">Apellidos:</td><td>{{$mensaje->apellidos}}</td></tr>
            <tr><td width="250">Email:</td><td>{{$mensaje->email}}</td></tr>
            <tr><td width="250">Teléfono:</td><td>{{$mensaje->telefono}}</td></tr>
            <tr><td width="250">Web:</td><td>{{$mensaje->web}}</td></tr>
            <tr><td width="250">Empresa:</td><td>{{$mensaje->empresa}}</td></tr>
            <tr><td width="250">Servicio en el que está interesado:</td><td>{{$mensaje->servicio}}</td></tr>
            <tr><td width="250">¿Cómo te enteraste de nosotros?:</td><td>{{$mensaje->nosotros}}</td></tr>
            <tr><td width="250">Mensaje:</td><td>{{$mensaje->mensaje}}</td></tr>
          </table>
          <br />
        </td>
      </tr>
      <tr>
        <td style="background-color:#1d201a;padding:10px;text-align:center;border-radius:0 0 4px 4px;color:#FFFFFF;">
          {{setting('site.url')}} &copy; Todos los derechos reservados 2020
        </td>
      </tr>
    </tbody>
  </table>'
