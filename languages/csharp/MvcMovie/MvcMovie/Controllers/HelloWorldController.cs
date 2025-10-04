using System;
using System.Collections.Generic;
using System.Linq;
using System.Text.Encodings.Web;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

// For more information on enabling MVC for empty projects, visit https://go.microsoft.com/fwlink/?LinkID=397860

namespace MvcMovie.Controllers
{
    public class HelloWorldController : Controller
    {

        //
        // GET: /HelloWorld/
        public IActionResult Index() // public methods are HTTP endpoints
        {
            //return "This is my default action...";
            return View();
        }

        //
        // GET: /HelloWorld/Welcome/

        //public string Welcome()
        //{
        //    return "This is the Welcome action method...";
        //}

        public IActionResult Welcome (string name, int numTimes)
        {
            //return HtmlEncoder.Default.Encode($"Hello {name}, ID: {ID}");
            ViewData["Message"] = "Hello " + name;
            ViewData["NumTimes"] = numTimes;

            return View();
        }

        // GET: /<controller>/
        //public IActionResult Index()
        //{
        //    return View();
        //}
    }
}
