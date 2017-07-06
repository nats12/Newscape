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
      <div className="small-12 large-12 columns tweet-block">
        <div className="media-object">
          <div className="media-object-section">
            <div className="thumbnail">
              <img className="article-image" src={article.urlToImage} alt={article.title} />
            </div>
          </div>
          <div className="media-object-section">
            <h4>{article.title}</h4>
            <p><small>{this.props.dateFormatter(article.publishedAt)}</small></p>
            <p><small>{article.sourceName}</small></p>
            <p>{article.description}</p>
            <p><a href={article.url} target="_blank">{article.url}</a></p>
            
            { 
              this.props.user ? <TweetButton 
                article={article} 
                tweetFormOpen={this.props.tweetFormOpen} 
                toggleTweetForm={this.props.toggleTweetForm}
                selectArticle={this.props.selectArticle}
                /> : ''
            }

          </div>
        </div>
      </div>
    )

  }
}

export default NewsArticle