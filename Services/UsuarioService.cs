using CoffeShopUMG.Models;
using Microsoft.EntityFrameworkCore;

namespace CoffeShopUMG.Services
{
    public class UsuarioService : IUsuarioService
    {
        private readonly UsuarioContext _context;

        public UsuarioService(UsuarioContext context)
        {
            _context = context;
        }

        public async Task<Usuario> GetUsuario(string nombreUsuario, string password)
        {
            Usuario usuario = await _context.Usuarios.Where(u=>u.NombreUsuario == nombreUsuario && u.password == password).FirstOrDefaultAsync();
            return usuario;
        }

        public async Task<Usuario> SaveUsuario(Usuario usuario)
        {
            _context.Usuarios.Add(usuario);
            await _context.SaveChangesAsync();
            return usuario;
        }
    }
}
