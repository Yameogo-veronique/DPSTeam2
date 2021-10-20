import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ListRecipePageRoutingModule } from './list-recipe-routing.module';

import { ListRecipePage } from './list-recipe.page';
import { Ng2SearchPipeModule } from 'ng2-search-filter';
@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ListRecipePageRoutingModule,
    Ng2SearchPipeModule
  ],
  declarations: [ListRecipePage]
})
export class ListRecipePageModule {}
