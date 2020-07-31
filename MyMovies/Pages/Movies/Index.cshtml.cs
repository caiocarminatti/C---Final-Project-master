using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.EntityFrameworkCore;
using MyMovies.Data;
using MyMovies.Movies;

namespace MyMovies.Pages.Movies
{
    public class IndexModel : PageModel
    {
        private readonly MyMovies.Data.MyMoviesContext _context;

        public IndexModel(MyMovies.Data.MyMoviesContext context)
        {
            _context = context;
        }

        public IList<Movie> Movie { get;set; }

        public async Task OnGetAsync()
        {
            Movie = await _context.Movie.ToListAsync();
        }
    }
}
