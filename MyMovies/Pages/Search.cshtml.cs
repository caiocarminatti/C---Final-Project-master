using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace MyMovies.Pages
{
    public class SearchModel : PageModel
    {
        public string Message { get; set; }

        public void OnGet()
        {
            Message = "Search for movies title to know more about it.";
        }
    }
}
