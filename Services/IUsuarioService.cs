using CoffeShopUMG.Models;

namespace CoffeShopUMG.Services
{
    public interface IUsuarioService
    {
        Task<Usuario> GetUsuario(string nombreUsuario, string password);
        Task<Usuario> SaveUsuario(Usuario usuario);
    }
}
