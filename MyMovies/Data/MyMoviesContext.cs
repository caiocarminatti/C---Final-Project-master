using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using MyMovies.Movies;

namespace MyMovies.Data
{
    public class MyMoviesContext : DbContext
    {
        public MyMoviesContext (DbContextOptions<MyMoviesContext> options)
            : base(options)
        {
        }

        public DbSet<MyMovies.Movies.Movie> Movie { get; set; }
    }
}
