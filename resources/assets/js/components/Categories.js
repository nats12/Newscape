import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import categories from '../data/categories'
// import sources from '../data/sources'

import Category from './Category';
import NewsSource from './NewsSource';
import TabList from './TabList';

import axios from 'axios';


class Categories extends Component {
  constructor() {
    super()

    this.state = {
      sources: window.Laravel.newsSources.sources,
      categories: []
    }

    axios.get('/api/categories')
      .then(response => {
        // const categories = {...this.state.categories};
        this.setState({categories: response.data.categories});
      })
      .catch( error => {
        console.log(error);
      });
  }


  selectTab = (category) => {

    axios.get('/api/categories')
      .then(response => {
        // const categories = {...this.state.categories};
        this.setState({categories: response.data.categories});
      })
      .catch( error => {
        console.log(error);
      });
      
    this.setState({
      categories: categories.map(category => {
        category.selected = category.cat === category
        return category
      }),
      sources: window.Laravel.newsSources.sources.category === 'general' ? window.Laravel.newsSources.sources : window.Laravel.newsSources.sources.filter(source => (source.category === category)),
    })
  }


  render() {

    const { sources, categories } = this.state;

    return(

        

        <div>

        <TabList categories={categories} selectTab={this.selectTab} />

          { 
            sources.map((source, i) => (<NewsSource key={"source" + i} source={source} /> )) 
          }
          
        </div>
      )
  }
}

export default Categories