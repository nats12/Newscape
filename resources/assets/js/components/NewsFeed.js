import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import NewsArticle from './NewsArticle';

class NewsFeed extends Component {
  constructor() {
    super()
  }

  render() {

    return (
      <div> 
        {
          this.props.newsArticles
          .sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) )
          .map((item, index) => this.props.dateFormatter(item.publishedAt) ? <NewsArticle key={index} newsArticle={item} dateFormatter={this.props.dateFormatter} /> : '')
        } 
      </div>
    )

  }
}



export default NewsFeed
