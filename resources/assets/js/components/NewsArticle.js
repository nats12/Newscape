import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import TweetButton from './TweetButton'

class NewsArticle extends Component {
  constructor() {
    super()

  }

  render() {

    const article = this.props.newsArticle;

    return (
      <div className="small-12 large-6 columns tweet-block">
        <div className="card">
            <img className="article-image" src={article.urlToImage} alt={article.title} />
          
          <div className="card-section offhover">
            <h4>{article.title}</h4>
            <p><small>{this.props.dateFormatter(article.publishedAt)}</small> <small className="source">{article.sourceName}</small></p>
          </div>

          <div className="card-section onhover">
            <p>Category here</p>  
            <p>{article.description}</p>
            <p>
              <a className="button small article-btn" href={article.url} target="_blank">View article</a>
              { 
                this.props.user ? <TweetButton 
                  article={article} 
                  tweetFormOpen={this.props.tweetFormOpen} 
                  toggleTweetForm={this.props.toggleTweetForm}
                  selectArticle={this.props.selectArticle}
                  /> : ''
              }
              
            </p>
          </div>

        </div>
      </div>
    )

  }
}

export default NewsArticle