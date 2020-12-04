{include 'Templates/header.tpl'}


<div>
    <h3 class="text-white">Cambiar privilegios a los usuarios</h3>  
        <form action="usuariosAdmin" method="GET">
            <label class="text-white" for="">Usuarios con permisos de administracion:  </label>
            <select name="usuariosConPermisos" id="" value="">
                {foreach from=$usuarios item=usuario}
                    {if $usuario->rol == 1}
                        <option value="{$usuario->id_usuario}">{$usuario->email}</option>
                    {/if}
                {/foreach}
            </select>
            <input type="submit" value="Quitar permisos">
        </form>
        <form action="usuariosNoAdmin" method="GET">
            {foreach from=$usuarios item=usuario}
                {if $usuario->rol == 0}
                    <label class="text-white" for="">Usuarios sin permisos de administracion:  </label>
                    <select name="usuariosSinPermisos" id="" value="">
                        {foreach from=$usuarios item=usuario}
                            {if $usuario->rol == 0}
                                <option value="{$usuario->id_usuario}">{$usuario->email}</option>
                            {/if}
                        {/foreach}
                    </select>
                    <input type="submit" value="Añadir permisos">    
                {/if}
            {/foreach} 
        </form>
        <form action="eliminarUsuario" method="GET">
            <label class="text-white" for="">Usuarios ha eliminar:  </label>
            <select name="borrarUsuario" id="" value="">
                {foreach from=$usuarios item=usuario}
                    <option value="{$usuario->id_usuario}">{$usuario->email}</option>
                {/foreach}
            </select>
            <input type="submit" value="Eliminar usuario">  
        </form>
</div>



{include 'Templates/footer.tpl'}