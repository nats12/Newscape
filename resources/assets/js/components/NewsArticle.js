import React, { Component } from 'react';
import ReactDOM from 'react-dom';


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
            <small>{this.props.dateFormatter(article.publishedAt)}</small>
            <p>{article.description}</p>
            <p><a href={article.url} target="_blank">{article.url}</a></p>
          </div>
        </div>
      </div>
    )

  }
}

export default NewsArticle