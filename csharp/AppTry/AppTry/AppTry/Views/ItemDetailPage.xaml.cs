﻿using AppTry.ViewModels;
using System.ComponentModel;
using Xamarin.Forms;

namespace AppTry.Views
{
    public partial class ItemDetailPage : ContentPage
    {
        public ItemDetailPage()
        {
            InitializeComponent();
            BindingContext = new ItemDetailViewModel();
        }
    }
}