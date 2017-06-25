import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import NewsArticle from './NewsArticle';

class NewsFeed extends Component {
  constructor() {
    super()
  }

  render() {

    const currentDate = new Date();
    let limitCount = 0;

    return (
      <div> 
        {
          this.props.newsArticles.sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) )
          .map(

            (item, index) => {
            const publishedAtDate = new Date(item.publishedAt);
            if(currentDate > publishedAtDate && limitCount <= 10) {
              limitCount += 1;
              return <NewsArticle key={index} newsArticle={item} dateFormatter={this.props.dateFormatter} />
            }
          })
        } 
      </div>
    )
  }
}



export default NewsFeed
