 using System;
using ContosoPets.Models;
using Microsoft.EntityFrameworkCore;

namespace ContosoPets.Data
{
    public class ContosoPetsContext :DbContext // DbContext is ~ the session
    {
        // DbSets are tables
        public DbSet<Customer> Customers { get; set; }
        public DbSet<Order> Orders { get; set; }
        public DbSet<Product> Products { get; set; }
        public DbSet<ProductOrder> ProductOrders { get; set; }

        //public static void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        //{

            //optionsBuilder.UseSqlServer("Dat Source=(localdb")\\MSSQLLocalDB;Inital Catalog = ConsosoPets;
        //}
    }
}
