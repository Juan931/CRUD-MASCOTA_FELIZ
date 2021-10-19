using System.Collections.Generic;
using System.Linq;
using HolaWeb.App.Dominio;

namespace HolaWeb.App.Persistencia.AppRepositorios
{
    public class RepositorioSaludosMemoria : IRepositorioSaludos
    {
        List<Saludo> saludos;

        public RepositorioSaludosMemoria()
        {
            saludos = new List<Saludo>()
            {
                new Saludo{Id=1,EnEspanol="Buenos dias", EnIngles="Good Morning", EnItaliano="Bongiorno"},
                new Saludo{Id=2,EnEspanol="Buenas tardes", EnIngles="Good Afternoon", EnItaliano="Buon pomeriggio"},
                new Saludo{Id=3,EnEspanol="Buenas noches", EnIngles="Good Nigth", EnItaliano="Buona notte"}
            };
        }

        public IEnumerable<Saludo> GetAll()
        {
            return saludos;
        }
        
        public Saludo GetSaludoPorId(int saludoId)
        {
            return saludos.SingleOrDefault(s => s.Id==saludoId);
        }
    }
}